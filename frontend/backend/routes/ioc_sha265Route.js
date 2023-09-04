import express from "express";
import {
    getioc_sha256 
} from "../controllers/ioc_sha256Controller.js";
 
const router = express.Router();
 
router.get('/ioc_sha265', getioc_sha256);
 
export default router;