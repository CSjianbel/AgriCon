from sqlalchemy import Column, Integer, Float, ForeignKey
from sqlalchemy.orm import relationship
from ..config import Base

class OrderItem(Base):
    __tablename__ = "order_items"

    id = Column(Integer, primary_key=True, index=True)
    order_id = Column(Integer, ForeignKey('orders.id'))
    item_id = Column(Integer, ForeignKey('items.id'))
    quantity = Column(Integer)
    price = Column(Float)

    order = relationship('Order', back_populates='items', foreign_keys=[order_id])
    items = relationship('Item', back_populates='order', foreign_keys=[item_id])