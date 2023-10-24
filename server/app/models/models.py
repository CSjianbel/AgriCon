from datetime import datetime
from pydantic import BaseModel
from typing import Optional


''' Model Schema Using Pydantic '''

class PostBase(BaseModel):
    title: str
    body: str

class PostCreate(PostBase):
    pass

class Post(PostBase):
    id: int
    is_published: bool = False  # Providing a default value False
    created: datetime = datetime.utcnow()
    modified: datetime = datetime.utcnow()
