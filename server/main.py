import uvicorn
from fastapi import FastAPI
from app.routers import user_router, item_router, order_router, inventory_router, rating_router

app = FastAPI(title="LAAD",
              docs_url="/docs", 
              redoc_url="/redocs"
)

app.include_router(user_router, prefix="/users", tags=["users"])
app.include_router(order_router, prefix="/orders", tags=["order"])
app.include_router(item_router, prefix="/items", tags=["items"])
app.include_router(inventory_router, prefix="/inventory", tags=["inventory"])
app.include_router(rating_router, prefix="/ratings", tags=["ratings"])

@app.get("/")
def home():
    return {"message": "Welcome to AgriCon's API."}

if __name__ == '__main__':
    uvicorn.run("main:app", host="127.0.0.1", port=8000, reload=True)

