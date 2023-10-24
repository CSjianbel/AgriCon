from fastapi import Depends, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union

from ..config import get_db
from ..controllers import get_cart, create_cart, update_cart, delete_cart, get_cart_items, create_cart_item, update_cart_item, delete_cart_item

cart_router = APIRouter()

@cart_router.post("/")
def create(cart: dict, db: Session=Depends(get_db)):
    db_cart = create_cart(db=db, cart=cart)
    return db_cart

@cart_router.get("/")
def read_carts(
    cart_id: Union[int, None] = Query(None, description='Filter by user ID'), 
    status: Union[int, None] = Query(None, description='Filter by status'), 
    business_id: Union[int, None] = Query(None, description='Filter by business ID'), 
    farm_id: Union[int, None] = Query(None, description='Filter by farm ID'), 
    skip: int = 0, 
    limit: int = 100, 
    db: Session = Depends(get_db)):

    filters = {}
    if cart_id is not None:
        filters['cart_id'] =  cart_id
    if status is not None:
        filters['status'] = status
    if business_id is not None:
        filters['business_id'] = business_id
    if farm_id is not None:
        filters['farm_id'] = farm_id

    carts = get_cart(db, filters=filters, skip=skip, limit=limit)
    return carts

@cart_router.patch("/{cart_id}")
def patch_cart(cart_id, cart: dict, db: Session = Depends(get_db)):
    db_cart = update_cart(db, cart_id=cart_id, cart=cart)
    return db_cart

@cart_router.delete("/{cart_id}")
def remove_cart(cart_id: int, db: Session=Depends(get_db)):
    delete_cart(db, cart_id)
    return {"message": "deleted cart"}

@cart_router.post("/{cart_id}/items")
def create_cartitem(cart_id: int, cart_item: dict, db: Session=Depends(get_db)):
    cart_item['cart_id'] = cart_id
    db_cart_item = create_cart_item(db=db, cart_item=cart_item)
    return db_cart_item

@cart_router.get("/{cart_id}/items")
def read_cart_items(cart_id: int, db: Session=Depends(get_db)):
    cart_items = get_cart_items(db, cart_id=cart_id)
    return cart_items

@cart_router.patch("/{cart_id}/items/{cart_item_id}")
def patch_cart_item(cart_id: int, cart_item_id: int, cart_item: dict, db: Session=Depends(get_db)):
    db_cart_item = update_cart_item(db, cart_item_id=cart_item_id, cart_item=cart_item)
    return db_cart_item

@cart_router.delete("/{cart_id}/items/{cart_item_id}")
def remove_cart_item(cart_id: int, cart_item_id: int, db: Session=Depends(get_db)):
    delete_cart_item(db, cart_item_id)
    return {"message": "deleted cart item"}
