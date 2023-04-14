"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.AppRouter = void 0;
const express_1 = require("express");
const admin_middleware_1 = require("../middleware/admin.middleware");
const admin_auth_routes_1 = require("./admin/admin.auth.routes");
const amenities_routes_1 = require("./admin/amenities.routes");
exports.AppRouter = (0, express_1.Router)();
exports.AppRouter.use("/admin/auth", admin_auth_routes_1.AdminRouter);
exports.AppRouter.use("/amenities", admin_middleware_1.adminPermission, amenities_routes_1.AmenitiesRoute);
