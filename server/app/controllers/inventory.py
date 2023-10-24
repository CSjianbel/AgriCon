from sqlalchemy.orm import Session

from ..models import Inventory

from sqlalchemy import select

def create_inventory(db: Session, inventory: dict, user_id: int):
    db_inventory = Inventory(
        user_id=user_id,
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

# def create_item(db: Session, item: dict, farm_id: int):
#     db_item = Item(
#         farm_id=farm_id,
#         name=item['name'],
#         unit_of_measure=item['unit_of_measure'],
#         category=item['category'],
#         status=item['status'],
#         )
#     db.add(db_item)
#     db.commit()
#     db.refresh(db_item)
#     return db_item

# def get_item(db: Session, item_id: int):
#     return db.execute(select(Item).where(Item.id == item_id)).scalar_one()

# def get_items(db: Session, filters: dict, skip: int = 0, limit: int = 100):
#     query = db.query(Item)
#     if 'item_id' in filters:
#         query = query.filter(Item.id == filters['item_id'])
#     if 'farm_id' in filters:
#         query = query.filter(Item.farm_id == filters['farm_id'])
#     if 'category' in filters:
#         query = query.filter(Item.category == filters['category'])
#     if 'status' in filters:
#         query = query.filter(Item.status == filters['status'])

#     return query.offset(skip).limit(limit).all()

# def update_item(db: Session, item_id: int, item: dict):
#     db_item = get_item(db, item_id=item_id)
#     for key, value in item.items():
#         setattr(db_item, key, value)
#     db.commit()
#     db.refresh(db_item)
#     return db_item

# def delete_item(db: Session, item_id: int):
#     db_item = get_item(db, item_id=item_id)
#     db.delete(db_item)
#     db.commit()
#     return db_item