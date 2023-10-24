from sqlalchemy.orm import Session

from ..models import Rating, User

from sqlalchemy import select, delete

def create_rating(db: Session, rating: dict):
    db_rating = Rating(
        farm_id=rating['farm_id'],
        business_id=rating['business_id'],
        item_id=rating['item_id'],
        rating=rating['rating'],
        comment=rating['comment']
    )
    db.add(db_rating)
    db.commit()
    db.refresh(db_rating)
    return db_rating

def get_rating(db: Session, rating_id: int):
    return db.execute(select(Rating).where(Rating.id == rating_id)).scalar_one()

def get_ratings(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(Rating)

    if 'rating_id' in filters:
        query = query.filter(Rating.id == filters['rating_id'])
    if 'farm_id' in filters:
        query = query.filter(Rating.farm_id == filters['farm_id'])
    if 'business_id' in filters:
        query = query.filter(Rating.business_id == filters['business_id'])
    if 'rating' in filters:
        query = query.filter(Rating.rating == filters['rating'])
    if 'comment' in filters:
        query = query.filter(Rating.comment == filters['comment'])
    if 'item_id' in filters:
        query = query.filter(Rating.item_id == filters['item_id'])

    return query.offset(skip).limit(limit).all()

def update_rating(db: Session, rating_id: int, rating: dict):
    db_rating = get_rating(db, rating_id)
    for key, value in rating.items():
        setattr(db_rating, key, value)
    db.commit()
    db.refresh(db_rating)
    return db_rating

def delete_rating(db: Session, rating_id: int):
    query = delete(Rating).where(Rating.id == rating_id)
    db.execute(query)
    db.commit()

