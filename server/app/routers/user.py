from fastapi import Depends, HTTPException, APIRouter
from sqlalchemy.orm import Session

from ..models import Post
from ..config import SessionLocal, get_db
from ..controllers import get_user, get_users, create_user, update_user, delete_user

# Define your APIRouter
user_router = APIRouter()

@user_router.post("/create")
def create(user: dict, db: Session = Depends(get_db)):
    db_user = create_user(db=db, user=user)
    return db_user

@user_router.get("/")
def read_users(skip: int = 0, limit: int = 100, db: Session = Depends(get_db)):
    users = get_users(db, skip=skip, limit=limit)
    return users

@user_router.get("/{user_id}")
def read_user(user_id: int, db: Session = Depends(get_db)):
    db_user = get_user(db, user_id=user_id)
    if db_user is None:
        raise HTTPException(status_code=404, detail="User not found")
    return db_user

@user_router.patch("/update/{user_id}")
def patch_user(user_id, user: dict, db: Session = Depends(get_db)):
    db_user = update_user(db, user_id=user_id, user=user)
    return db_user

@user_router.delete("/delete/{user_id}")
def remove_user(user_id: int, db: Session=Depends(get_db)):
    delete_user(db, user_id)
    return {"message": "deleted user!"}