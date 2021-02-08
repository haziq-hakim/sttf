import React, { Component} from "react";
import { Switch,Route,withRouter,Redirect } from "react-router-dom";
import Button from '@material-ui/core/Button';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import Avatar from '@material-ui/core/Avatar';
import List from '@material-ui/core/List';
import TextField from '@material-ui/core/TextField';
import ListItem from '@material-ui/core/ListItem';
import ListItemAvatar from '@material-ui/core/ListItemAvatar';
import ListItemText from '@material-ui/core/ListItemText';
import DialogTitle from '@material-ui/core/DialogTitle';
import Dialog from '@material-ui/core/Dialog';
import PersonIcon from '@material-ui/icons/Person';
import AddIcon from '@material-ui/icons/Add';
import Typography from '@material-ui/core/Typography';
import Admin from "../../layout/Admin.js";


const useStyles = theme => ({
    root: {
        '& .MuiTextField-root': {
          margin: theme.spacing(1),
          width: '25ch',
        },
    }
  });

   class DemographyDialog extends Component {
    constructor(props) {
      super(props); 
    }
    
     handleFormSubmission =(value)=> {
      event.preventDefault()
    
      const { history } = this.props      
      const path = `/api/forms/index/editData`;
    
   
      let checklists_results =[]
     this.props.stffDetails.map((detail,index) => (checklists_results.push({detail_id: detail.DETAIL_ID,isChecked: this.props.checklist_results[index].CHECKLIST_MARK , remark:this.props.checklist_remarks[index].CHECKLIST_REMARK}) ));
      fetch(path, {
       
        method: 'POST',
        mode: 'same-origin',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        body: JSON.stringify({
         checklist_results : checklists_results,
        _token : $('meta[name="csrf-token"]').attr('content'), 
        })
      }).then((response) =>  {
     
      if (response.status == 200){
        this.props.redirecToAppLists()
      }}   
      );

      }

  
   handleClose = () => {
      this.props.onClose();
    };
  
  
  render () {
    const {classes} = this.props;

    const {open} = this.props;
    return (
      <Dialog onClose={this.handleClose} aria-labelledby="simple-dialog-title" open={open}>
        <DialogTitle id="simple-dialog-title">Set backup account</DialogTitle>

        <form className={classes.root} noValidate autoComplete="off">
      <div>
        <TextField required id="standard-required" label="Required" defaultValue="Hello World" />
        <TextField disabled id="standard-disabled" label="Disabled" defaultValue="Hello World" />
       
      </div>
    </form>


        <div className=" px-4 max-w-full flex-grow flex-1 btn-submit-margin-top btn-submit-margin-left">
              <h3
                className={
                  "font-semibold text-lg  text-gray-800" 
                
                }
              >
            
             <Button    variant="contained" color="primary" onClick={this.handleFormSubmission} > Submit  </Button>
              </h3>
              
            </div>
      </Dialog>
    );
  }
}




  export default withStyles(useStyles)(DemographyDialog)