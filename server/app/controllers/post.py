from sqlalchemy.orm import Session

from ..models import Post

from sqlalchemy import select

def create_post(db: Session, post: dict):
    db_post = Post(title=post['title'], body=post['body'])
    db.add(db_post)
    db.commit()
    db.refresh(db_post)
    return db_post

def get_post(db: Session, post_id: int):
    return db.execute(select(Post).where(Post.id == post_id)).scalar_one()

def get_posts(db: Session, skip: int = 0, limit: int = 100):
    return db.query(Post).offset(skip).limit(limit).all()

