import React, { Component } from "react";
import { Switch, Route, Redirect } from "react-router-dom";
// components
// import Navbar from "components/Navbars/AuthNavbar.js";


// views

import Login from "../views/auth/Login.js";


export default class Auth extends Component {
  constructor(props) {
    super(props);

    this.state = {
      email: "",
      password: "",
      loginErrors: ""
    };

    this.handleLogin = this.handleLogin.bind(this);
    this.handleLogout = this.handleLogout.bind(this);
  }

  handleLogout() {
    this.setState({
      loggedInStatus: "NOT_LOGGED_IN",
      user: {}
    });
  }

  handleLogin(data) {
    this.setState({
      loggedInStatus: "LOGGED_IN",
      user: data.user
    });
  }
  render() {
    return(
      
     <main>
        <section className="relative w-full h-full py-40 min-h-screen">
          {/* <div
            className="absolute top-0 w-full h-full bg-gray-900 bg-no-repeat bg-full"
            style={{
              backgroundImage:
                "url(" + require("assets/img/register_bg_2.png") + ")",
            }}
          ></div> */}
          <Switch>
           

            <Route
              exact
              path={"/auth/login"}
              render={props => (
                <Login
                  {...props}
                  handleLogin={this.handleLogin}
                  handleLogout={this.handleLogout}
                  loggedInStatus={this.state.loggedInStatus}
                />
              )}
            />

           <Route
              exact
              path={"/auth/register"}
              render={props => (
                <Register
                  {...props}
                  handleLogin={this.handleLogin}
                  handleLogout={this.handleLogout}
                  loggedInStatus={this.state.loggedInStatus}
                />
              )}
            />
           
            <Redirect from="*" to="/auth/login" />
          </Switch>
        
        </section>
      </main>
    )
}
}
