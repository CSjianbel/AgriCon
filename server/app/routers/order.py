from fastapi import Depends, HTTPException, APIRouter
from sqlalchemy.orm import Session

from ..config import get_db
from ..controllers import get_order, get_orders, create_order, update_order, delete_order

# Define your APIRouter
order_router = APIRouter()

@order_router.post("/create")
def create(order: dict, db: Session = Depends(get_db)):
    db_order = create_order(db=db, order=order)
    return db_order

@order_router.get("/")
def read_orders(skip: int = 0, limit: int = 100, db: Session = Depends(get_db)):
    orders = get_orders(db, skip=skip, limit=limit)
    return orders

@order_router.get("/{order_id}")
def read_order(order_id: int, db: Session = Depends(get_db)):
    db_order = get_order(db, order_id=order_id)
    if db_order is None:
        raise HTTPException(status_code=404, detail="User not found")
    return db_order

@order_router.patch("/update/{order_id}")
def patch_order(order_id, order: dict, db: Session = Depends(get_db)):
    db_order = update_order(db, order_id=order_id, order=order)
    return db_order

@order_router.delete("/delete/{order_id}")
def remove_order(order_id: int, db: Session=Depends(get_db)):
    delete_order(db, order_id)
    return {"message": "deleted order"}