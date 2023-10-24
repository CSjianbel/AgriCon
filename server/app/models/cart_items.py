from sqlalchemy import Column, Integer, Float, ForeignKey
from sqlalchemy.orm import relationship
from ..config import Base

class CartItem(Base):
    __tablename__ = "cart_items"

    id = Column(Integer, primary_key=True, index=True)
    cart_id = Column(Integer, ForeignKey('carts.id'))
    item_id = Column(Integer, ForeignKey('items.id'))

    cart = relationship('Cart', back_populates='items', foreign_keys=[cart_id])
    item = relationship('Item', back_populates='cart', foreign_keys=[item_id])