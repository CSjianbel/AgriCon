from sqlalchemy import Column, Integer, String, DateTime, Float, ForeignKey
from sqlalchemy.orm import relationship
from ..config import Base
import datetime
from .inventory import Inventory

from .cart_items import CartItem

class Cart(Base):
    __tablename__ = "carts"

    id = Column(Integer, primary_key=True, index=True)
    timestamp = Column(DateTime, default=datetime.datetime.utcnow)
    business_id = Column(Integer, ForeignKey('users.id'))
    farm_id = Column(Integer, ForeignKey('users.id'))

    business = relationship('User', back_populates="business_carts", foreign_keys=[business_id])
    farm = relationship('User', back_populates="farm_carts", foreign_keys=[farm_id])
    items = relationship('CartItem', back_populates='cart', foreign_keys=[CartItem.cart_id])