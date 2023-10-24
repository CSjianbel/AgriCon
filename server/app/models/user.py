from sqlalchemy import Column, Integer, String, DateTime
from sqlalchemy.orm import relationship
from ..config import Base, engine
import datetime
from sqlalchemy.orm import relationship
from .order import Order
from .inventory import Inventory

class User(Base):
    __tablename__ = "users"

    id = Column(Integer, primary_key=True, index=True)
    first_name = Column(String(100))
    last_name = Column(String(100))
    password = Column(String(64))
    user_type = Column(String(10))
    created = Column(DateTime, default=datetime.datetime.utcnow)
    modified = Column(DateTime, default=datetime.datetime.utcnow, onupdate=datetime.datetime.utcnow)
    
    business_orders = relationship('Order', back_populates="business", foreign_keys=[Order.business_id])
    farm_orders = relationship('Order', back_populates="farm", foreign_keys=[Order.farm_id])
    items = relationship("Item", back_populates="farm")
    inventory = relationship("Inventory", back_populates="user", foreign_keys=[Inventory.user_id])