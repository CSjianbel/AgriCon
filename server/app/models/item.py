from sqlalchemy import Column, Integer, String, Boolean, DateTime, ForeignKey
from ..config import Base, engine
from sqlalchemy.orm import relationship

class Item(Base):
    __tablename__ = "items"

    id = Column(Integer, primary_key=True, index=True)
    farm_id = Column(Integer, ForeignKey("users.id"))
    name = Column(String(255), nullable=False)
    unit_of_measure = Column(String(255), nullable=False)
    category = Column(String(255), nullable=False)
    status = Column(String(255), nullable=False)

    farm = relationship("User", back_populates="items")

