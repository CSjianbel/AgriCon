from sqlalchemy.orm import Session

from ..models import Item

from sqlalchemy import select

def create_item(db: Session, item: dict, farm_id: int):
    db_item = Item(
        farm_id=farm_id,
        name=item['name'],
        unit_of_measure=item['unit_of_measure'],
        category=item['category'],
        status=item['status'],
        )
    db.add(db_item)
    db.commit()
    db.refresh(db_item)
    return db_item

def get_item(db: Session, item_id: int):
    return db.execute(select(Item).where(Item.id == item_id)).scalar_one()

def get_items(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(Item)
    if 'item_id' in filters:
        query = query.filter(Item.id == filters['item_id'])
    if 'farm_id' in filters:
        query = query.filter(Item.farm_id == filters['farm_id'])
    if 'category' in filters:
        query = query.filter(Item.category == filters['category'])
    if 'status' in filters:
        query = query.filter(Item.status == filters['status'])

    return query.offset(skip).limit(limit).all()

def update_item(db: Session, item_id: int, item: dict):
    db_item = get_item(db, item_id=item_id)
    for key, value in item.items():
        setattr(db_item, key, value)
    db.commit()
    db.refresh(db_item)
    return db_item

def delete_item(db: Session, item_id: int):
    db_item = get_item(db, item_id=item_id)
    db.delete(db_item)
    db.commit()
    return db_item