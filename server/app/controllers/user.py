from sqlalchemy.orm import Session

from ..models import User 

from sqlalchemy import select, delete

def create_user(db: Session, user: dict):
    db_user = User(
        first_name=user['first_name'], 
        last_name=user['last_name'],
        password=user['password'], 
        user_type=user['user_type']
    )
    db.add(db_user)
    db.commit()
    db.refresh(db_user)
    return db_user

def get_user(db: Session, user_id: int):
    return db.execute(select(User).where(User.id == user_id)).scalar_one()

def get_users(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(User)

    if 'user_id' in filters:
        query = query.filter(User.id == filters['user_id'])
    if 'first_name' in filters:
        query = query.filter(User.first_name == filters['first_name'])
    if 'last_name' in filters:
        query = query.filter(User.last_name == filters['last_name'])
    if 'user_type' in filters:
        query = query.filter(User.user_type == filters['user_type'])

    return query.offset(skip).limit(limit).all()

def update_user(db: Session, user_id: int, user: dict):
    db_user = get_user(db, user_id)
    for key, value in user.items():
        setattr(db_user, key, value)
    db.commit()
    db.refresh(db_user)
    return db_user

def delete_user(db: Session, user_id: int):
    query = delete(User).where(User.id == user_id)
    db.execute(query)
    db.commit()