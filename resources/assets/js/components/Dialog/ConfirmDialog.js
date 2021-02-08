import React, { Component} from "react";

import Button from '@material-ui/core/Button';

import DialogTitle from '@material-ui/core/DialogTitle';
import Dialog from '@material-ui/core/Dialog';

import { ToastContainer, toast } from 'react-toastify';
import { withStyles } from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import Grid from '@material-ui/core/Grid';


const useStyles = theme => ({
  
  paper: {
    maxWidth: 400,
    textAlign: 'center',
    margin: `${theme.spacing(1)}px auto`,
    padding: theme.spacing(2),
  }, 

  button: {
    display: 'block',
    marginTop: theme.spacing(2),
  },
 
});
   class ConfirmDialog extends Component {
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
        this.props.redirecToAppLists(this.props.App_ID)
        toast.success('🦄 profile info successfully updated!', {
          position: "top-right",
          autoClose: 5000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: true,
          draggable: true,
          progress: undefined,
          });
      }}   
      );

      }

  
   handleClose = () => {
      this.props.onClose(this.props.selectedValue);
    };
  
  
  render () {
    const {classes} = this.props;

    const {  selectedValue, open ,submission} = this.props;
    return (
      <Dialog onClose={this.handleClose} aria-labelledby="simple-dialog-title" open={open}>
        <DialogTitle id="simple-dialog-title">Are you sure you want to proceed ?</DialogTitle>

        <Grid container spacing={3}>
      
       
        <Grid item xs={6}>
          <div className={classes.paper}> 
          <Button    variant="contained" color="primary" onClick={this.handleFormSubmission} > Submit  </Button>
            </div>
        </Grid>
        <Grid item xs={6}>
          <div className={classes.paper}> 
          <Button    variant="contained" color="primary" onClick={() => this.props.onClose()} > Cancel  </Button>
            </div>
        </Grid>
       
      </Grid>
        {/* <div className=" px-4 max-w-full flex-grow flex-1 btn-submit-margin-top btn-submit-margin-left">
              <h3
                className={
                  "font-semibold text-lg  text-gray-800" 
                
                }
              >
            
             <Button    variant="contained" color="primary" onClick={this.handleFormSubmission} > Submit  </Button>
             
              </h3>
              
            </div> */}
      </Dialog>
    );
  }
}


export default withStyles(useStyles)(ConfirmDialog)
