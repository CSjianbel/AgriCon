from .user import User
from .order import Order
from .order_items import OrderItem
from .item import Item
from .user import User
from .inventory import Inventory
from .rating import Rating
from .cart_items import CartItem
from .cart import Cart
from ..config import Base, engine


def create_tables():
    Base.metadata.create_all(bind=engine, tables=[User.__table__])
    Base.metadata.create_all(bind=engine, tables=[Item.__table__])
    Base.metadata.create_all(bind=engine, tables=[Order.__table__])
    Base.metadata.create_all(bind=engine, tables=[Inventory.__table__])
    Base.metadata.create_all(bind=engine, tables=[OrderItem.__table__])
    Base.metadata.create_all(bind=engine, tables=[Rating.__table__])
    Base.metadata.create_all(bind=engine, tables=[Cart.__table__])
    Base.metadata.create_all(bind=engine, tables=[CartItem.__table__])

# Call create_tables when this module is imported
create_tables()
