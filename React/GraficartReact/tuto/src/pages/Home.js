import React, { useState } from "react";
import { SearchExercises } from "../components/SearchExercises";
import { Exercises } from "../components/Exercises";
import { HeroBanner } from "../components/HeroBanner";
import { Box } from "@mui/material";
export const Home = () => {
  const [exercises, setExercises] = useState([]);
  const [bodyPart, setBodyPart] = useState("all");
  return (
    <Box>
      <HeroBanner />
      <SearchExercises
        setExercises={setExercises}
        bodyPart={bodyPart}
        setBodyPart={setBodyPart}
      />
      <Exercises
        setExercises={setExercises}
        bodyPart={bodyPart}
        setBodyPart={setBodyPart}
      />
    </Box>
  );
};
