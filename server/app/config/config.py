from fastapi import FastAPI
import databases
import sqlalchemy
from dotenv import load_dotenv
import os

load_dotenv()

''' FastAPI CONFIGURATION '''
app = FastAPI(title="LAAD",
              docs_url="/docs", 
              redoc_url="/redocs"
)


''' DATABASE CONNECTION '''
# DATABASE_URL = "mysql+mysqlconnector://root:password@localhost/laad"
DATABASE_URL = f"mysql+mysqlconnector://{os.getenv('DB_USER')}:{os.getenv('DB_PASSWORD')}@{os.getenv('DB_HOST')}/{os.getenv('DB_NAME')}"
database = databases.Database(DATABASE_URL)
metadata = sqlalchemy.MetaData()

engine = sqlalchemy.create_engine(
    DATABASE_URL
)


''' APP EVENT SETTING'''
@app.on_event("startup")
async def startup():
    await database.connect()


@app.on_event("shutdown")
async def shutdown():
    await database.disconnect()
