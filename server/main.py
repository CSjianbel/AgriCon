import uvicorn
from fastapi import FastAPI
from app.routers import user_router, item_router, order_router

app = FastAPI(title="LAAD",
              docs_url="/docs", 
              redoc_url="/redocs"
)

# Create all tables in the database
# 
# app.include_router(post_router, prefix="/posts", tags=["posts"])
app.include_router(user_router, prefix="/users", tags=["users"])
app.include_router(order_router, prefix="/order", tags=["order"])
app.include_router(item_router, prefix="/items", tags=["items"])

@app.get("/")
def home():
    return {"message": "Welcome to FastAPI CRUD Example."}


if __name__ == '__main__':
    uvicorn.run("main:app", host="127.0.0.1", port=8000, reload=True)

