from fastapi import Depends, FastAPI, HTTPException, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union


from ..config import SessionLocal, get_db
from ..controllers import get_ratings, create_rating, update_rating, delete_rating

# Define your APIRouter
rating_router = APIRouter()

@rating_router.post("/")
def create(rating: dict, db: Session = Depends(get_db)):
    db_rating = create_rating(db=db, rating=rating)
    return db_rating

@rating_router.get("/")
def read_ratings(
    rating_id: Union[int, None] = Query(None, description="Filter by rating ID"),
    user_id: Union[int, None] = Query(None, description="Filter by user ID"),
    business_id: Union[int, None] = Query(None, description="Filter by business ID"),
    rating: Union[int, None] = Query(None, description="Filter by rating"),
    comment: Union[str, None] = Query(None, description="Filter by comment"),
    skip: int = Query(0, description="Skip the first N ratings"),
    limit: int = Query(100, description="Limit the number of ratings to retrieve"),
    db: Session = Depends(get_db)
):
    filters = {}
    if rating_id is not None:
        filters['rating_id'] = rating_id
    if user_id is not None:
        filters['user_id'] = user_id
    if business_id is not None:
        filters['business_id'] = business_id
    if rating is not None:
        filters['rating'] = rating
    if comment is not None:
        filters['comment'] = comment

    ratings = get_ratings(db, filters=filters, skip=skip, limit=limit)
    return ratings

@rating_router.patch("/{rating_id}")
def patch_rating(rating_id, rating: dict, db: Session = Depends(get_db)):
    db_rating = update_rating(db, rating_id=rating_id, rating=rating)
    return db_rating

@rating_router.delete("/{rating_id}")
def remove_rating(rating_id: int, db: Session=Depends(get_db)):
    delete_rating(db, rating_id)
    return {"message": "deleted rating!"}
