from sqlalchemy.orm import Session

from ..models import Inventory

from sqlalchemy import select

def create_inventory(db: Session, inventory: dict):
    db_inventory = Inventory(
        user_id=inventory['user_id'],
        order_id=inventory['order_id'],
        item_id=inventory['item_id'],
        quantity=inventory['quantity'],
        unit_of_measure=inventory['unit_of_measure']
        )
    db.add(db_inventory)
    db.commit()
    db.refresh(db_inventory)
    return db_inventory

def get_inventories(db: Session, filters: dict, skip: int = 0, limit: int = 100):
    query = db.query(Inventory)
    if 'farm_id' in filters:
        query = query.filter(Inventory.farm_id == filters['farm_id'])
    if 'order_id' in filters:
        query = query.filter(Inventory.order_id == filters['order_id'])
    if 'item_id' in filters:
        query = query.filter(Inventory.item_id == filters['item_id'])
    if 'quantity' in filters:
        query = query.filter(Inventory.quantity == filters['quantity'])
    if 'unit_of_measure' in filters:
        query = query.filter(Inventory.unit_of_measure == filters['unit_of_measure'])

    return query.offset(skip).limit(limit).all()

def get_inventory(db: Session, inventory_id: int):
    return db.execute(select(Inventory).where(Inventory.id == inventory_id)).scalar_one()

def update_inventory(db: Session, inventory_id: int, inventory: dict):
    db_inventory = get_inventory(db, inventory_id=inventory_id)
    for key, value in inventory.items():
        setattr(db_inventory, key, value)
    db.commit()
    db.refresh(db_inventory)
    return db_inventory

def delete_inventory(db: Session, inventory_id: int):
    db_inventory = get_inventory(db, inventory_id=inventory_id)
    db.delete(db_inventory)
    db.commit()
    return db_inventory