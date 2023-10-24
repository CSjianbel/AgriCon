from sqlalchemy import Column, Integer, String, DateTime
from sqlalchemy.orm import relationship
from ..config import Base
import datetime
from sqlalchemy.orm import relationship
from .order import Order
from .inventory import Inventory
from .rating import Rating
from .cart import Cart

class User(Base):
    __tablename__ = "users"

    id = Column(Integer, primary_key=True, index=True)
    first_name = Column(String(100))
    last_name = Column(String(100))
    email = Column(String(100), unique=True, index=True)
    password = Column(String(64))
    user_type = Column(String(10))
    created = Column(DateTime, default=datetime.datetime.utcnow)
    modified = Column(DateTime, default=datetime.datetime.utcnow, onupdate=datetime.datetime.utcnow)
    
    business_orders = relationship('Order', back_populates="business", foreign_keys=[Order.business_id])
    farm_orders = relationship('Order', back_populates="farm", foreign_keys=[Order.farm_id])
    items = relationship("Item", back_populates="farm")
    inventory = relationship("Inventory", back_populates="user", foreign_keys=[Inventory.user_id])
    business_ratings = relationship('Rating', back_populates="business", foreign_keys=[Rating.business_id])
    farm_ratings = relationship('Rating', back_populates="farm", foreign_keys=[Rating.farm_id])
    business_carts = relationship('Cart', back_populates="business", foreign_keys=[Cart.business_id])
    farm_carts = relationship('Cart', back_populates="farm", foreign_keys=[Cart.farm_id])