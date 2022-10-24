"use strict";
const { MongoClient } = require("mongodb");
const express = require("express");

// Constants
const PORT = process.env.PORT || 3000;
// const MONGO_URL =
//   "mongodb://root:example@localhost:57017/todo_db?authSource=admin";

// App
const app = express();
app.use(express.urlencoded());

app.get("/", (req, res) => {
  res.send("Hello Docker");
});

const MONGO_URL = process.env.MONGO_URL || "";

/**
 * Testing Mongo Connection
 */
app.get("/test", (req, res) => {
  // res.send("Hello Docker");
  if (MONGO_URL === "") {
    res.send("MONGO_URL is not set");
    return;
  }

  try {
    MongoClient.connect(MONGO_URL, (err, db) => {
      if (err) {
        throw err;
      }

      res.send("MongoClient connected");
    });
  } catch (err) {
    res.send(`Connect fail: ${err}`);
    return;
  }
});

/**
 * Adding a task
 */

app.post("/todo", (req, res) => {
  console.debug("todo: ", req.body);

  // Getting data from param
  const { task } = req.body;

  if (task === undefined) {
    res.json({
      success: false,
      message: "Task is required",
    });
    return;
  }

  try {
    MongoClient.connect(MONGO_URL, (err, db) => {
      if (err) {
        throw err;
      }

      var dbo = db.db("todo_db");
      var newTask = { task: task, createDate: Date.now() };

      dbo.collection("todo_list").insertOne(newTask, (err) => {
        if (err) throw err;
        res.json({ success: true, message: "a task is added." });
      });

      // res.send("MongoClient connected");
    });
  } catch (err) {
    res.json({
      success: true,
      message: `Connect fail: ${err}`,
    });
  }
});

/**
 * Listing all tasks
 */
app.get("/todo", (req, res) => {
  console.debug("todo: ", req.body);

  try {
    MongoClient.connect(MONGO_URL, (err, db) => {
      if (err) {
        throw err;
      }

      var dbo = db.db("todo_db");
      dbo
        .collection("todo_list")
        .find({})
        .toArray((err, result) => {
          if (err) throw err;

          // console.debug("result: ", result);
          res.json({ success: true, result: result});
        });
      //   dbo.collection("todo_list").insertOne(newTask, (err) => {
      //     if (err) throw err;
      //     res.json({ success: true, message: "a task is added." });
      //   });

      // res.send("MongoClient connected");
    });
  } catch (err) {
    res.json({
      success: true,
      message: `Connect fail: ${err}`,
    });
  }
});

app.listen(PORT);
console.log(`Running on port ${PORT}`);
