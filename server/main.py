import uvicorn
from fastapi import FastAPI
from app.routers.post import post_router
from app.routers.user import user_router

app = FastAPI(title="LAAD",
              docs_url="/docs", 
              redoc_url="/redocs"
)

app.include_router(post_router, prefix="/posts", tags=["posts"])
app.include_router(user_router, prefix="/users", tags=["users"])

@app.get("/")
def home():
    return {"message": "Welcome to FastAPI CRUD Example."}


if __name__ == '__main__':
    uvicorn.run("main:app", host="127.0.0.1", port=8000, reload=True)

