from sqlalchemy import Column, Integer, String, DateTime, Float, ForeignKey
from sqlalchemy.orm import relationship
from ..config import Base, engine
import datetime
from .inventory import Inventory

class Order(Base):
    __tablename__ = "orders"

    id = Column(Integer, primary_key=True, index=True)
    total_price = Column(Float)
    status = Column(String(100))
    timestamp = Column(DateTime, default=datetime.datetime.utcnow)
    business_id = Column(Integer, ForeignKey('users.id'))
    farm_id = Column(Integer, ForeignKey('users.id'))

    business = relationship('User', back_populates="business_orders", foreign_keys=[business_id])
    farm = relationship('User', back_populates="farm_orders", foreign_keys=[farm_id])
    inventory = relationship('Inventory', back_populates="order", foreign_keys=[Inventory.order_id])
