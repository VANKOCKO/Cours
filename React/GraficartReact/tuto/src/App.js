import logo from "./logo.svg";
import "./App.css";
import { Routes, Route, BrowserRouter } from "react-router-dom";
import { ExerciseDetail } from "./pages/ExerciseDetail";
import { Box } from "@mui/material";
import { Navbar } from "./components/Navbar";
import { Home } from "./pages/Home";
import { Footer } from "./pages/Footer";

function App() {
  return (
    <Box width="400px" sx={{ width: { x1: "1488px" } }} m="auto">
      <Navbar />
      <Home />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/exercices/:id" element={<ExerciseDetail />} />
      </Routes>
      <Footer />
    </Box>
  );
}

export default App;
