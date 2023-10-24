
from sqlalchemy.orm import Session

from ..models import Order

from sqlalchemy import select, update, delete

def create_order(db: Session, order: dict):
    db_order = Order(
        farm_id=order['farm_id'], business_id=order['business_id'],
        total_price=order['total_price'], status=order['status']
    )
    db.add(db_order)
    db.commit()
    db.refresh(db_order)
    return db_order

def get_order(db: Session, order_id: int):
    return db.execute(select(Order).where(Order.id == order_id)).scalar_one()

def get_orders(db: Session, skip: int = 0, limit: int = 100):
    return db.query(Order).offset(skip).limit(limit).all()

def update_order(db: Session, order_id: int, order: dict):
    query = update(Order).where(Order.id == order_id).values(
        farmer_id=order['farmer_id'], business_id=order['business_id'],
        total_price=order['total_price'], status=order['status']
    )
    db.execute(query)
    db.commit()
    return get_order(db, order_id)

def delete_order(db: Session, order_id: int):
    query = delete(Order).where(Order.id == order_id)
    db.execute(query)
    db.commit()