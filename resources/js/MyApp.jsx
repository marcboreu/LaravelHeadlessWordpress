import {Fragment} from "react";
import {createRoot} from "react-dom/client";
import { BrowserRouter, Routes, Route, Navigate } from "react-router-dom";
import Navbar from './components/Navbar';
import Home from './pages/Home';
import About from './pages/About';
import Contact from './pages/Contact';
import NotFound from './pages/NotFound';
import { Footer } from './components/Footer';



function MyApp() {
    return (
        <Fragment>
            <Navbar />
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/contact" element={<Contact />} />
                <Route path="/public" element={ <Navigate to="/" />}/>
                <Route path="*" element={<NotFound />} />
            </Routes>
            <Footer />
        </Fragment>
    );
}



export default MyApp;
if (document.getElementById("app")) {
    const root = createRoot(document.getElementById("app"));
    root.render(
        <BrowserRouter>
            <MyApp />
        </BrowserRouter>
    );
}
