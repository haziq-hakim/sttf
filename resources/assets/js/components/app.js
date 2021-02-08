import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter, Route, Switch, Redirect } from "react-router-dom";

import "@fortawesome/fontawesome-free/css/all.min.css";
import 'bootstrap/dist/css/bootstrap.min.css';
import '@progress/kendo-theme-default/dist/all.css';

// import 'bootstrap/dist/css/bootstrap.min.css';

// layouts
import "../../../assets/styles/tailwind.css";
import Admin from "../layout/Admin.js";
import Auth from "../layout/Auth.js";

// views without layouts
// import Login from "views/auth/Login.js";

// import Index from "views/Index.js";

ReactDOM.render(
  <BrowserRouter>
    <Switch>
      add routes with layouts
      <Route path="/admin" component={Admin} />
      <Route path="/auth" component={Auth} />
      {/* add routes without layouts */}
      {/* <Route path="/landing" exact component={Landing} />
      <Route path="/profile" exact component={Profile} /> */}
      <Route path="/" exact component={Auth} />
      {/* add redirect for first page */}
      <Redirect from="*" to="/" />
    </Switch>
  </BrowserRouter>,
  document.getElementById("app")
);
