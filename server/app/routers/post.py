from fastapi import Depends, FastAPI, HTTPException, APIRouter
from sqlalchemy.orm import Session

from ..models import Post
from ..config import SessionLocal, get_db
from ..controllers import get_post, get_posts, create_post

# Define your APIRouter
post_router = APIRouter()

@post_router.post("/create")
def create(post: dict, db: Session = Depends(get_db)):
    print(post)
    db_post = create_post(db=db, post=post)
    return db_post

@post_router.get("/")
def read_posts(skip: int = 0, limit: int = 100, db: Session = Depends(get_db)):
    posts = get_posts(db, skip=skip, limit=limit)
    return posts

@post_router.get("/{post_id}")
def read_post(post_id: int, db: Session = Depends(get_db)):
    db_post = get_post(db, post_id=post_id)
    print(db_post)
    if db_post is None:
        raise HTTPException(status_code=404, detail="Post not found")
    return db_post
