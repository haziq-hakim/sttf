import React, { Component} from "react";
import { Switch, Route, Redirect,useHistory  } from "react-router-dom";
import { browserHistory } from 'react-router';


//navBar
import clsx from 'clsx';
import IconButton from '@material-ui/core/IconButton';
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import MenuIcon from '@material-ui/icons/Menu';
import { makeStyles, withStyles} from '@material-ui/core/styles';
import Typography from '@material-ui/core/Typography';
import Badge from '@material-ui/core/Badge';
import "../../../../assets/styles/tailwind.css";


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
class TopNavBar extends Component {
  constructor(props) {
    super(props);
    this.state = {
        open : false,
        clientInfo: []
    }
  }

  editRowHandler=(Client)=>{
    let path = `/admin/AppList`;
   
 
  this.setState({
    clientInfo: Client
  })
  
  this.props.history.push(path);

 };

 routeChange=()=> {
  let path = `newPath`;
  let history = useHistory();
  history.push(path);
}
  
  
render(){

   const {classes} = this.props;
  return (

<AppBar position="absolute" className={clsx(classes.appBar, classes.appBarShift)}>
<Toolbar className={classes.toolbar}>
  <IconButton
    edge="start"
    color="inherit"
    aria-label="open drawer"
    onClick={() => this.setState({ open: true})}
    className={clsx(classes.menuButton, open && classes.menuButtonHidden)}
  >
    <MenuIcon />
  </IconButton>
  <Typography component="h1" variant="h6" color="inherit" noWrap className={classes.title}>
    Dashboard
  </Typography>
  <IconButton color="inherit">
    <Badge badgeContent={4} color="secondary">
      {/* <NotificationsIcon /> */}
    </Badge>
  </IconButton>
</Toolbar>
</AppBar>
  )
}
}

export default  withStyles(useStyles) (TopNavBar)