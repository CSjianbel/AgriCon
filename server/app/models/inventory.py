from sqlalchemy import Column, Integer, String, Boolean, DateTime, ForeignKey
from ..config import Base, engine
from sqlalchemy.orm import relationship

class Inventory(Base):
    __tablename__ = "inventory"

    id = Column(Integer, primary_key=True, index=True)
    user_id = Column(Integer, ForeignKey('users.id'))
    order_id = Column(Integer, ForeignKey('orders.id'))
    item_id = Column(Integer, ForeignKey('items.id'))
    quantity = Column(Integer)
    unit_of_measure = Column(String(255), nullable=False)

    user = relationship('User', back_populates="inventory", foreign_keys=[user_id])
    order = relationship('Order', back_populates="inventory", foreign_keys=[order_id])
    item = relationship('Item', back_populates="inventory", foreign_keys=[item_id])