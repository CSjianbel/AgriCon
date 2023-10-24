from fastapi import Depends, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union

from ..config import get_db
from ..controllers import get_orders, create_order, update_order, delete_order

# Define your APIRouter
order_router = APIRouter()

@order_router.post("/")
def create(order: dict, business_id: int, farm_id: int, db: Session=Depends(get_db)):
    db_order = create_order(db=db, order=order, business_id=business_id, farm_id=farm_id)
    return db_order

@order_router.get("/")
def read_orders(
    order_id: Union[int, None] = Query(None, description='Filter by user ID'), 
    status: Union[int, None] = Query(None, description='Filter by status'), 
    business_id: Union[int, None] = Query(None, description='Filter by business ID'), 
    farm_id: Union[int, None] = Query(None, description='Filter by farm ID'), 
    skip: int = 0, 
    limit: int = 100, 
    db: Session = Depends(get_db)):

    filters = {}
    if order_id is not None:
        filters['order_id'] =  order_id
    if status is not None:
        filters['status'] = status
    if business_id is not None:
        filters['business_id'] = business_id
    if farm_id is not None:
        filters['farm_id'] = farm_id

    orders = get_orders(db, filters=filters, skip=skip, limit=limit)
    return orders

@order_router.patch("/{order_id}")
def patch_order(order_id, order: dict, db: Session = Depends(get_db)):
    db_order = update_order(db, order_id=order_id, order=order)
    return db_order

@order_router.delete("/{order_id}")
def remove_order(order_id: int, db: Session=Depends(get_db)):
    delete_order(db, order_id)
    return {"message": "deleted order"}