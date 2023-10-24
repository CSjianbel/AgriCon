from sqlalchemy.orm import Session

from ..models import User 

from sqlalchemy import select, update, delete

def create_user(db: Session, user: dict):
    db_user = User(
        first_name=user['first_name'], last_name=user['last_name'],
        password=user['password'], user_type=user['user_type']
    )
    db.add(db_user)
    db.commit()
    db.refresh(db_user)
    return db_user

def get_user(db: Session, user_id: int):
    return db.execute(select(User).where(User.id == user_id)).scalar_one()

def get_users(db: Session, skip: int = 0, limit: int = 100):
    return db.query(User).offset(skip).limit(limit).all()

def update_user(db: Session, user_id: int, user: dict):
    query = update(User).where(User.id == user_id).values(
        first_name=user['first_name'], last_name=user['last_name'],
        password=user['password'], user_type=user['user_type']
    )
    db.execute(query)
    db.commit()
    return get_user(db, user_id)


def delete_user(db: Session, user_id: int):
    query = delete(User).where(User.id == user_id)
    db.execute(query)
    db.commit()