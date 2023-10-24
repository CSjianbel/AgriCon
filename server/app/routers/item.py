from fastapi import Depends, FastAPI, HTTPException, APIRouter
from sqlalchemy.orm import Session

from ..config import SessionLocal, get_db
from ..controllers import get_item, get_items, create_item, update_item, delete_item

# Define your APIRouter
item_router = APIRouter()

@item_router.post("/create")
def create(item: dict, farm_id: int, db: Session = Depends(get_db)):
    db_item = create_item(db=db, item=item, farm_id=farm_id)
    return db_item

@item_router.get("/")
def read_items(filters: dict, skip: int = 0, limit: int = 100, db: Session = Depends(get_db)):
    items = get_items(db, filters=filters, skip=skip, limit=limit)
    return items

@item_router.get("/{item_id}")
def read_item(item_id: int, db: Session = Depends(get_db)):
    db_item = get_item(db, item_id=item_id)
    if db_item is None:
        raise HTTPException(status_code=404, detail="Item not found")
    return db_item

@item_router.patch("/update/{item_id}")
def patch_item(item_id, item: dict, db: Session = Depends(get_db)):
    db_item = update_item(db, item_id=item_id, item=item)
    return db_item

@item_router.delete("/delete/{item_id}")
def remove_item(item_id: int, db: Session=Depends(get_db)):
    delete_item(db, item_id)
    return {"message": "deleted item!"}
