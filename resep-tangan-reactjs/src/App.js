import "./App.css";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./pages/Home";
import Login from "./pages/Login";
import Logout from "./pages/Logout";
import Me from "./pages/Me";
import Password from "./pages/Password";
import Refresh from "./pages/Refresh";
import Register from "./pages/Register";
import Recipes from "./pages/Recipes";
// import Navbar from "./components/Navbar";
function App() {
  // const navbarHide = () => {};

  return (
    <Router>
      <Routes>
        <Route exact path="/" element={<Home />} />
        <Route exact path="/refresh" element={<Refresh />} />
        <Route exact path="/login" element={<Login />} />
        <Route exact path="/register" element={<Register />} />
        <Route exact path="/logout" element={<Logout />} />
        <Route exact path="/password" element={<Password />} />
        <Route exact path="/recipes" element={<Recipes />} />
        <Route exact path="/me" element={<Me />} />
      </Routes>
      {/* <Navbar /> */}
    </Router>
  );
}

export default App;
