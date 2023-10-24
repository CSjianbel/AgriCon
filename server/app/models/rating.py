from sqlalchemy import Column, Integer, String, DateTime, Float, ForeignKey
from sqlalchemy.orm import relationship
from ..config import Base
import datetime

class Rating(Base):
    __tablename__ = "ratings"

    id = Column(Integer, primary_key=True, index=True)
    rating = Column(Integer)
    comment = Column(String(100))
    timestamp = Column(DateTime, default=datetime.datetime.utcnow)
    business_id = Column(Integer, ForeignKey('users.id'))
    farm_id = Column(Integer, ForeignKey('users.id'))
    item_id = Column(Integer, ForeignKey('items.id'), nullable=True)

    business = relationship('User', back_populates="business_ratings", foreign_keys=[business_id],)
    farm = relationship('User', back_populates="farm_ratings", foreign_keys=[farm_id])
    item = relationship('Item', back_populates='ratings', foreign_keys=[item_id])