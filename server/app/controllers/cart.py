
from sqlalchemy.orm import Session

from ..models import Cart, CartItem

from sqlalchemy import select, delete

def create_cart(db: Session, cart: dict):
    db_cart = Cart(
        farm_id=cart['farm_id'],
        business_id=cart['business_id'],
    )
    db.add(db_cart)
    db.commit()
    db.refresh(db_cart)
    return db_cart

def get_cart(db: Session, cart_id: int):
    return db.execute(select(Cart).where(Cart.id == cart_id)).scalar_one()

def get_carts(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(Cart)

    if 'cart_id' in filters:
        query = query.filter(Cart.id == filters['cart_id'])
    if 'farm_id' in filters:
        query = query.filter(Cart.farm_id == filters['farm_id'])
    if 'business_id' in filters:
        query = query.filter(Cart.business_id == filters['business_id'])

    return query.offset(skip).limit(limit).all()

def update_cart(db: Session, cart_id: int, cart: dict):
    db_cart = get_cart(db, cart_id)
    for key, value in cart.items():
        setattr(db_cart, key, value)
    db.commit()
    db.refresh(db_cart)
    return db_cart

def delete_cart(db: Session, cart_id: int):
    query = delete(Cart).where(Cart.id == cart_id)
    db.execute(query)
    db.commit()

def create_cart_item(db: Session, cart_item: dict):
    db_cart_item = CartItem(
        cart_id=cart_item['cart_id'],
        item_id=cart_item['item_id'],
    )
    db.add(db_cart_item)
    db.commit()
    db.refresh(db_cart_item)
    return db_cart_item

def get_cart_item(db: Session, cart_item_id: int):
    return db.execute(select(CartItem).where(CartItem.id == cart_item_id)).scalar_one()

def get_cart_items(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(CartItem)

    if 'cart_item_id' in filters:
        query = query.filter(CartItem.id == filters['cart_item_id'])
    if 'cart_id' in filters:
        query = query.filter(CartItem.cart_id == filters['cart_id'])
    if 'item_id' in filters:
        query = query.filter(CartItem.item_id == filters['item_id'])

    return query.offset(skip).limit(limit).all()

def update_cart_item(db: Session, cart_item_id: int, cart_item: dict):
    db_cart_item = get_cart_item(db, cart_item_id)
    for key, value in cart_item.items():
        setattr(db_cart_item, key, value)
    db.commit()
    db.refresh(db_cart_item)
    return db_cart_item

def delete_cart_item(db: Session, cart_item_id: int):
    query = delete(CartItem).where(CartItem.id == cart_item_id)
    db.execute(query)
    db.commit()
