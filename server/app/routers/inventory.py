from fastapi import Depends, FastAPI, HTTPException, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union


from ..config import SessionLocal, get_db
from ..controllers import create_inventory, get_inventories, update_inventory, delete_inventory

# Define your APIRouter
inventory_router = APIRouter()

@inventory_router.post("/{user_id}")
def create(inventory: dict, user_id: int, db: Session = Depends(get_db)):
    db_inventory = create_inventory(db=db, inventory=inventory, user_id=user_id)
    return db_inventory

@inventory_router.get("/")
def read_inventories(
    farm_id: Union[int, None] = Query(None, description="Filter by farm ID"),
    order_id: Union[int, None] = Query(None, description="Filter by order ID"),
    item_id: Union[int, None] = Query(None, description="Filter by item ID"),
    quantity: Union[int, None] = Query(None, description="Filter by quantity"),
    unit_of_measure: Union[str, None] = Query(None, description="Filter by unit of measure"),
    skip: int = Query(0, description="Skip the first N inventories"),
    limit: int = Query(100, description="Limit the number of inventories to retrieve"),
    db: Session = Depends(get_db)
):
    filters = {}
    if farm_id is not None:
        filters['farm_id'] = farm_id
    if order_id is not None:
        filters['order_id'] = order_id
    if item_id is not None:
        filters['item_id'] = item_id
    if quantity is not None:
        filters['quantity'] = quantity
    if unit_of_measure is not None:
        filters['unit_of_measure'] = unit_of_measure

    inventories = get_inventories(db, filters=filters, skip=skip, limit=limit)
    return inventories

@inventory_router.patch("/update/{inventory_id}")
def update(inventory_id, inventory: dict, db: Session = Depends(get_db)):
    db_inventory = update_inventory(db, inventory_id=inventory_id, inventory=inventory)
    return db_inventory

@inventory_router.delete("/delete/{inventory_id}")
def remove(inventory_id: int, db: Session=Depends(get_db)):
    delete_inventory(db, inventory_id)
    return {"message": "deleted inventory!"}