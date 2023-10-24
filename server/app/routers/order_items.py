from fastapi import Depends, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union

from ..config import get_db
from ..controllers import get_order_items, create_order_item, update_order_item, delete_order_item

# Define your APIRouter
order_item_router = APIRouter()

@order_item_router.post("/")
def create(order_item: dict, order_id: int, item_id: int, db: Session=Depends(get_db)):
    db_order_item = create_order_item(db=db, order_item=order_item, order_id=order_id, item_id=item_id)
    return db_order_item

@order_item_router.get("/")
def read_order_items(
    order_item_id: Union[int, None] = Query(None, description='Filter by order item id'),
    order_id: Union[int, None] = Query(None, description='Filter by order order id'),
    item_id: Union[int, None] = Query(None, description='Filter by order item id'),
    skip: int = 0, 
    limit: int = 100, 
    db: Session = Depends(get_db)):

    filters = {}
    if order_item_id is not None:
        filters['order_item_id'] = order_item_id
    if order_id is not None:
        filters['order_id'] = order_id
    if item_id is not None:
        filters['item_id'] = item_id

    orders_items = get_order_items(db, filters=filters, skip=skip, limit=limit)
    return orders_items

@order_item_router.patch("/{order_item_id}")
def patch_order_item(order_item_id, order_item: dict, db: Session=Depends(get_db)):
    db_order_item = update_order_item(db, order_item_id=order_item_id, order_item=order_item)
    return db_order_item

@order_item_router.delete("/{order_item_id}")
def remove_order_item(order_item_id: int, db: Session=Depends(get_db)):
    delete_order_item(db, order_item_id)
    return {"message": "deleted order"}