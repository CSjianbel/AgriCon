
from sqlalchemy.orm import Session

from ..models import Order

from sqlalchemy import select, delete

def create_order(db: Session, order: dict, business_id: int, farm_id: int):
    db_order = Order(
        farm_id=farm_id, business_id=business_id,
        total_price=order['total_price'], status=order['status']
    )
    db.add(db_order)
    db.commit()
    db.refresh(db_order)
    return db_order

def get_order(db: Session, order_id: int):
    return db.execute(select(Order).where(Order.id == order_id)).scalar_one()

def get_orders(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(Order)

    if 'order_id' in filters:
        query = query.filter(Order.id == filters['order_id'])
    if 'status' in filters:
        query = query.filter(Order.status == filters['status'])
    if 'business_id' in filters:
        query = query.filter(Order.business_id == filters['business_id'])
    if 'farm_id' in filters:
        query = query.filter(Order.farm_id == filters['farm_id'])

    return query.offset(skip).limit(limit).all()

def update_order(db: Session, order_id: int, order: dict):
    db_order = get_order(db, order_id)
    for key, value in order.items():
        setattr(db_order, key, value)
    db.commit()
    db.refresh(db_order)
    return db_order

def delete_order(db: Session, order_id: int):
    query = delete(Order).where(Order.id == order_id)
    db.execute(query)
    db.commit()