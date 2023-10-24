from sqlalchemy import Column, Integer, String, DateTime, Float, ForeignKey
from sqlalchemy.orm import relationship
from ..config import Base, engine
import datetime

class Order(Base):
    __tablename__ = "orders"

    id = Column(Integer, primary_key=True, index=True)
    total_price = Column(Float)
    status = Column(String(100))
    timestamp  = Column(DateTime, default=datetime.datetime.utcnow)

    business_id = Column(Integer, ForeignKey('users.id'))
    business = relationship('User', back_populates="business_orders")

    farmer_id = Column(Integer, ForeignKey('users.id'))
    farmer = relationship('User', back_populates="farmer_orders")

# Reflect the schema and create tables
Base.metadata.create_all(engine)