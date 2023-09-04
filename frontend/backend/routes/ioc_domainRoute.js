import express from "express";
import {
    getioc_domain
} from "../controllers/ioc_domainController.js";
 
const router = express.Router();
 
router.get('/ioc_domain', getioc_domain);
 
export default router;