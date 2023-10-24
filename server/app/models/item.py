from sqlalchemy import Column, Integer, String, Boolean, DateTime, ForeignKey
from ..config import Base, engine
from sqlalchemy.orm import relationship
from .inventory import Inventory

from .order_items import OrderItem
from .rating import Rating
from .cart_items import CartItem

class Item(Base):
    __tablename__ = "items"

    id = Column(Integer, primary_key=True, index=True)
    farm_id = Column(Integer, ForeignKey("users.id"))
    name = Column(String(255), nullable=False)
    unit_of_measure = Column(String(255), nullable=False)
    category = Column(String(255), nullable=False)
    status = Column(String(255), nullable=False)

    farm = relationship("User", back_populates="items")
    inventory = relationship("Inventory", back_populates="item", foreign_keys=[Inventory.item_id])
    order = relationship('OrderItem', back_populates='items', foreign_keys=[OrderItem.item_id])
    ratings = relationship('Rating', back_populates='item', foreign_keys=[Rating.item_id])
    cart = relationship('CartItem', back_populates='item', foreign_keys=[CartItem.item_id])