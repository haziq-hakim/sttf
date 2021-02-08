import React, { Component} from "react";
import { Switch, Route, Redirect,useHistory  } from "react-router-dom";
import { withRouter } from "react-router-dom";
//navBar
import clsx from 'clsx';
import IconButton from '@material-ui/core/IconButton';

import Toolbar from '@material-ui/core/Toolbar';
import MenuIcon from '@material-ui/icons/Menu';
import { makeStyles, withStyles} from '@material-ui/core/styles';
import Typography from '@material-ui/core/Typography';
import Badge from '@material-ui/core/Badge';
import "../../styles/tailwind.css";
// import NotificationsIcon from '@material-ui/icons/Notifications';


// components
import Sidebar from "../components/Sidebar/Sidebar.js";
import TopNavBar from "../components/AppBar/AppBar.js";
import DialogConfirm  from "../components/Dialog/ConfirmDialog.js";
//  import Dashboard from "../views/admin/Dashboard.js"

// // views
// import Maps from "views/admin/Maps.js";
// import Settings from "views/admin/Settings.js";
import CheckList from "../views/admin/Tables.js";
import AppList from "../views/admin/AppList.js";
import ApplicationLists from "../views/admin/ApplicationLists.js";



const drawerWidth = 260;
const useStyles = theme => ({
  root: {
    display: 'flex',
  },
  toolbar: {
    paddingRight: 24, // keep right padding when drawer closed
  },
  toolbarIcon: {
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'flex-end',
    padding: '0 8px',
    ...theme.mixins.toolbar,
  },
  appBar: {
    zIndex: theme.zIndex.drawer + 1,
    transition: theme.transitions.create(['width', 'margin'], {
      easing: theme.transitions.easing.sharp,
      duration: theme.transitions.duration.leavingScreen,
    }),
  },
  appBarShift: {
    marginLeft: drawerWidth,
    width: `calc(100% - ${drawerWidth}px)`,
    transition: theme.transitions.create(['width', 'margin'], {
      easing: theme.transitions.easing.sharp,
      duration: theme.transitions.duration.enteringScreen,
    }),
  },
  menuButton: {
    marginRight: 36,
  },
  menuButtonHidden: {
    display: 'none',
  },
  title: {
    flexGrow: 1,
  },
  drawerPaper: {
    position: 'relative',
    whiteSpace: 'nowrap',
    width: drawerWidth,
    transition: theme.transitions.create('width', {
      easing: theme.transitions.easing.sharp,
      duration: theme.transitions.duration.enteringScreen,
    }),
  },

  appBarSpacer: theme.mixins.toolbar,
  content: {
    flexGrow: 1,
    height: '100vh',
    overflow: 'auto',
  },
});
class Admin extends Component {
  constructor(props) {
    super(props);
    this.state = {
        open : false,
        clientInfo: [],
        navigateToAppID : []
    }
  }

  editRowHandler=(Client)=>{
   
  
  let path = `/admin/checkList`;

  this.setState({clientInfo: Client
  }, () => {
    this.props.history.push(path);
});

 };
 redirecTo=(App_ID)=>{
  let path = `/admin/List`;
  this.setState({navigateToAppID: App_ID
  }, () => {
    this.props.history.push(path);
});
  

 }

  
render(){

   const {classes} = this.props;
  return (
    <div>
      <Sidebar />
   <div className="flex flex-wrap mt-4">
        <div className="w-full mb-12 px-4">
       < TopNavBar/>
      </div>
      </div>
      <div className="relative md:ml-64 bg-gray-200">
        <div className="px-4 md:px-10 mx-auto w-full -m-24">
          <Switch>
          <Route path="/admin/List"   render={(props) => (
    <ApplicationLists {...props}  App_ID={this.state.navigateToAppID}  editRowHandler={this.editRowHandler}  />
     )}  />


          <Route path="/admin/AppList"   render={(props) => (
    <AppList {...props} editRowHandler={this.editRowHandler}  />
     )}  />

<Route path="/dialog"   render={(props) => (
    <DialogConfirm {...props} redirecToAppLists={this.redirecTo}  />
     )}  />
            <Route path="/admin/checkList"   render={(props) => (
    <CheckList {...props} clientInfo={this.state.clientInfo} redirecToAppLists={this.redirecTo} />
     )}  />

            <Redirect from="/admin" to="/admin/List" />
          </Switch>
        
        </div>
      </div>
    </div>
  );
}
}

export default withRouter(Admin);