from app.models import User, Item, Order, Inventory, Rating, Cart, OrderItem, CartItem
from app.config import SessionLocal, engine, get_db

db = SessionLocal()

# Create users
user1 = User(
    first_name="John",
    last_name="Doe",
    email="john@gmail.com",
    password="password",
    user_type="farmer"
)

user2 = User(
    first_name="Jane",
    last_name="Doe",
    email="jane@gmail.com",
    password="password",
    user_type="business"
)

user3 = User(
    first_name="James",
    last_name="Doe",
    email="james@gmail.com",
    password="password",
    user_type="business"
)

# Create items
item1 = Item(
    farm_id=1,
    name="Tomatoes",
    description="Fresh tomatoes from the farm",
    unit_of_measure="kg",
    category="vegetable",
    status="available",
)

item2 = Item(
    farm_id=1,
    name="Potatoes",
    description="Fresh potatoes from the farm",
    unit_of_measure="kg",
    category="vegetable",
    status="available",
)

item3 = Item(
    farm_id=1,
    name="Cabbage",
    description="Fresh cabbage from the farm",
    unit_of_measure="kg",
    category="vegetable",
    status="available",
)

item4 = Item(
    farm_id=1,
    name="Onions",
    description="Fresh onions from the farm",
    unit_of_measure="kg",
    category="vegetable",
    status="available",
)

item5 = Item(
    farm_id=1,
    name="Carrots",
    description="Fresh carrots from the farm",
    unit_of_measure="kg",
    category="vegetable",
    status="available",
)

item6 = Item(
    farm_id=1,
    name="Cucumber",
    description="Fresh cucumber from the farm",
    unit_of_measure="kg",
    category="vegetable",
    status="available",
)

# Create inventory f=
inventory1 = Inventory(
    user_id=1,
    item_id=1,
    quantity=100,
    unit_of_measure="kg"
)

inventory2 = Inventory(
    user_id=1,
    item_id=2,
    quantity=100,
    unit_of_measure="kg"
)

inventory3 = Inventory(
    user_id=1,
    item_id=3,
    quantity=100,
    unit_of_measure="kg"
)

inventory4 = Inventory(
    user_id=1,
    item_id=4,
    quantity=100,
    unit_of_measure="kg"
)

inventory5 = Inventory(
    user_id=1,
    item_id=5,
    quantity=100,
    unit_of_measure="kg"
)

inventory6 = Inventory(
    user_id=1,
    item_id=6,
    quantity=100,
    unit_of_measure="kg"
)   

# Create orders
order1 = Order(
    farm_id=1,
    business_id=2,
    total_price=100,
    status="pending"
)

order2 = Order(
    farm_id=1,
    business_id=2,
    total_price=100,
    status="pending"
)

order3 = Order(
    farm_id=1,
    business_id=2,
    total_price=100,
    status="pending"
)

order4 = Order(
    farm_id=1,
    business_id=2,
    total_price=100,
    status="pending"
)

# Create order items
order_item1 = OrderItem(
    order_id=1,
    item_id=1,
    quantity=10,
    price=100,
)

order_item2 = OrderItem(
    order_id=2,
    item_id=2,
    quantity=10,
    price=100,
)

order_item3 = OrderItem(
    order_id=3,
    item_id=3,
    quantity=10,
    price=100,
)

order_item4 = OrderItem(
    order_id=4,
    item_id=4,
    quantity=10,
    price=100,
)

order_item5 = OrderItem(
    order_id=1,
    item_id=5,
    quantity=10,
    price=100,
)

# Create cart
cart1 = Cart(
    business_id=2,
    farm_id=1,
)

cart2 = Cart(
    business_id=2,
    farm_id=1,
)

cart3 = Cart(
    business_id=2,
    farm_id=1,
)

# Create cart items
cart_item1 = CartItem(
    cart_id=1,
    item_id=1
)

cart_item2 = CartItem(
    cart_id=2,
    item_id=2
)

cart_item3 = CartItem(
    cart_id=3,
    item_id=3
)

# Create ratings
rating1 = Rating(
    business_id=2,
    farm_id=1,
    item_id=1,
    rating=5,
    comment="Great product",
)

rating2 = Rating(
    business_id=2,
    farm_id=1,
    item_id=2,
    rating=5,
    comment="Great product",
)

rating3 = Rating(
    business_id=2,
    farm_id=1,
    item_id=3,
    rating=5,
    comment="Great product",
)

rating4 = Rating(
    business_id=2,
    farm_id=1,
    item_id=4,
    rating=5,
    comment="Great product",
)

# Commit to database
db.add(user1)
db.add(user2)
db.add(user3)
db.add(item1)
db.add(item2)
db.add(item3)
db.add(item4)
db.add(item5)
db.add(item6)
db.add(inventory1)
db.add(inventory2)
db.add(inventory3)
db.add(inventory4)
db.add(inventory5)
db.add(inventory6)
db.add(order1)
db.add(order2)
db.add(order3)
db.add(order4)
db.add(order_item1)
db.add(order_item2)
db.add(order_item3)
db.add(order_item4)
db.add(order_item5)
db.add(cart1)
db.add(cart2)
db.add(cart3)
db.add(cart_item1)
db.add(cart_item2)
db.add(cart_item3)
db.add(rating1)
db.add(rating2)
db.add(rating3)
db.add(rating4)


db.commit()

db.close()