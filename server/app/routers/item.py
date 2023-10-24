from fastapi import Depends, FastAPI, HTTPException, APIRouter, Query
from sqlalchemy.orm import Session
from typing import Union


from ..config import SessionLocal, get_db
from ..controllers import get_items, create_item, update_item, delete_item

# Define your APIRouter
item_router = APIRouter()

@item_router.post("/create")
def create(item: dict, farm_id: int, db: Session = Depends(get_db)):
    db_item = create_item(db=db, item=item, farm_id=farm_id)
    return db_item

@item_router.get("/")
def read_items(
    item_id: Union[int, None] = Query(None, description="Filter by item ID"),
    farm_id: Union[int, None] = Query(None, description="Filter by farm ID"),
    category: Union[str, None] = Query(None, description="Filter by category"),
    status: Union[str, None] = Query(None, description="Filter by status"),
    skip: int = Query(0, description="Skip the first N items"),
    limit: int = Query(100, description="Limit the number of items to retrieve"),
    db: Session = Depends(get_db)
):
    filters = {}
    if item_id is not None:
        filters['item_id'] = item_id
    if farm_id is not None:
        filters['farm_id'] = farm_id
    if category is not None:
        filters['category'] = category
    if status is not None:
        filters['status'] = status

    items = get_items(db, filters=filters, skip=skip, limit=limit)
    return items

@item_router.patch("/update/{item_id}")
def patch_item(item_id, item: dict, db: Session = Depends(get_db)):
    db_item = update_item(db, item_id=item_id, item=item)
    return db_item

@item_router.delete("/delete/{item_id}")
def remove_item(item_id: int, db: Session=Depends(get_db)):
    delete_item(db, item_id)
    return {"message": "deleted item!"}
