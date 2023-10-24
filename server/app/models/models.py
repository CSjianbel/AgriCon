from sqlalchemy import Column, Integer, String, Boolean, DateTime
from ..config import Base
import datetime

class Post(Base):
    __tablename__ = "posts"

    id = Column(Integer, primary_key=True, index=True)
    title = Column(String(100))
    body = Column(String(500))
    is_published = Column(Boolean, default=False)
    created = Column(DateTime, default=datetime.datetime.utcnow)
    modified = Column(DateTime, default=datetime.datetime.utcnow)
