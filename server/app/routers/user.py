from fastapi import Depends, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union

from ..config import get_db
from ..controllers import get_users, create_user, update_user, delete_user

# Define your APIRouter
user_router = APIRouter()

@user_router.post("/create")
def create(user: dict, db: Session = Depends(get_db)):
    db_user = create_user(db=db, user=user)
    return db_user

@user_router.get("/")
def read_users(
    user_id: Union[int, None] = Query(None, description='Filter by user ID'), 
    first_name: Union[str, None] = Query(None, description='Filter by first name'), 
    last_name: Union[str, None] = Query(None, description='Filter by last name'), 
    user_type: Union[str, None] = Query(None, description='Filter by user type'),
    skip: int = 0,
    limit: int = 100, 
    db: Session = Depends(get_db)):

    filters = {}
    if user_id is not None:
        filters['user_id'] = user_id
    if first_name is not None:
        filters['first_name'] = first_name
    if last_name is not None:
        filters['last_name'] = last_name
    if user_type is not None:
        filters['user_type'] = user_type

    users = get_users(db, filters=filters, skip=skip, limit=limit)
    return users

@user_router.patch("/update/{user_id}")
def patch_user(user_id, user: dict, db: Session = Depends(get_db)):
    db_user = update_user(db, user_id=user_id, user=user)
    return db_user

@user_router.delete("/delete/{user_id}")
def remove_user(user_id: int, db: Session=Depends(get_db)):
    delete_user(db, user_id)
    return {"message": "deleted user!"}