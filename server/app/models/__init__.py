from .models import Post
from .user import User
from .order import Order
from .item import Item
from .user import User
from ..config import Base, engine

def create_tables():
    Base.metadata.create_all(bind=engine, tables=[User.__table__])
    Base.metadata.create_all(bind=engine, tables=[Item.__table__])
    Base.metadata.create_all(bind=engine, tables=[Order.__table__])

# Call create_tables when this module is imported
create_tables()
