
from sqlalchemy.orm import Session

from ..models import Order, OrderItem

from sqlalchemy import select, delete

def create_order(db: Session, order: dict):
    db_order = Order(
        farm_id=order['farm_id'], 
        business_id=order['business_id'],
        total_price=order['total_price'], 
        status=order['status']
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

def create_order_item(db: Session, order_item: dict):
    db_order_item = OrderItem(
        order_id=order_item['order_id'],
        item_id=order_item['item_id'],
        quantity=order_item['quantity'], 
        price=order_item['price']
    )
    db.add(db_order_item)
    db.commit()
    db.refresh(db_order_item)
    return db_order_item

def get_order_item(db: Session, order_item_id: int):
    return db.execute(select(OrderItem).where(OrderItem.id == order_item_id)).scalar_one()

def get_order_items(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(OrderItem)

    if 'order_item_id' in filters:
        query = query.filter(OrderItem.id == filters['order_item_id'])
    if 'order_id' in filters:
        query = query.filter(OrderItem.order_id == filters['order_id'])
    if 'item_id' in filters:
        query = query.filter(OrderItem.item_id == filters['item_id'])

    return query.offset(skip).limit(limit).all()

def update_order_item(db: Session, order_item_id: int, order_item: dict):
    db_order_item = get_order_item(db, order_item_id)
    for key, value in order_item.items():
        setattr(db_order_item, key, value)
    db.commit()
    db.refresh(db_order_item)
    return db_order_item

def delete_order_item(db: Session, order_item_id: int):
    query = delete(OrderItem).where(OrderItem.id == order_item_id)
    db.execute(query)
    db.commit()